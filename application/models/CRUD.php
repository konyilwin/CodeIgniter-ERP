<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CRUD extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private function __return($query, $items, $method)
    {
        return $query->result();
    }

    public function __getAll($entity, $where='', $method='')
    {
        $table = substr_count($entity, 'sys_') ? $entity : 'sys_'.$entity;
        $this->db->select('*');
        $this->db->from($table);
        switch ($where){
            case '':
                break;
            case count($where)==1:
                $this->db->where(key($where), $where[key($where)]);
                break;
            case count($where)>1:
                for($i=0; $i<count($where); $i++)
                {
                    $this->db->where(key($where[$i]), $where[$i][key($where[$i])]);
                }
        }
        $query = $this->db->get();
        $items['num_err'] = $this->db->_error_number();
        $items['mens_err'] = $this->db->_error_message();

        return crud_model::__return($query, $items, $method);

    }

    public function create($table, $data)
    {
        $items = array();
        $this->db->insert($table, $data);
        //echo $this->db->last_query();

        $items['num_err'] = $this->db->_error_number();
        $items['mens_err'] = $this->db->_error_message();
        if($items['num_err']==0){
            detail_message($items, 'CREATE');
        }else{
            $items['num_err'] = 'null';
            detail_message($items, 'ERROR_AJAX');
        }


    }

    public function create_much($table, $array,$method='')
    {
        $items = array();
        $keys = array_keys($array);
        $values = array_values($array[$keys[0]]);
        $val = array();

        for ($i = 0; $i < count($array); $i++){
            for ($j = 0; $j < count($values); $j++) {
                for ($z = 0; $z < count($keys); $z++) {
                    $val[$j][$keys[$z]] = $array[$keys[$z]][$j];
                }
            }
        }

        for ($x = 0; $x < count($val); $x++) {
            $this->db->insert($table, $val[$x]);
            $items['num_err'] = $this->db->_error_number();
            $items['mens_err'] = $this->db->_error_message();
            //echo $this->db->last_query();
        }

        switch ($method) {
            case 'ajax':
                if ($items['num_err'] == 0) {
                    detail_message($items, 'CREATE');
                } else {
                    detail_message($items, 'ERROR_AJAX');
                }
                break;
            case '':
                if ($items['num_err'] == 0) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
        }
        return NULL;
    }

    public function read($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $items = array();
            foreach ($query->result() as $key) {
                $items[] = $key;
            }
            return $items;
        } else {
            $items['num_err'] = 'null';
            detail_message($items, 'EMPTY');
            return FALSE;
        }
    }

    public function read_data_table($table, $where='')
    {

        $this->db->select('*');
        $this->db->from($table);
        if(!empty($where)){
            $this->db->where(key($where), $where[key($where)]);
        }
        $query = $this->db->get();
        $result = array(
            "draw" => 1,
            "recordsTotal" => $query->num_rows(),
            "recordsFiltered" => $query->num_rows(),
            'data' => $query->result());
        echo json_encode($result);
        return json_encode($result);

    }

    public function read_id($table, $whereId, $method = '')
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where(key($whereId), $whereId[key($whereId)]);
        $query = $this->db->get();

        return $query->result();

    }

    public function read_where($table, $where, $method = '')
    {
        $items = array();
        $result = array();

        $this->db->select('*');
        $this->db->from($table);
        if(is_array($where)){
            foreach ($where as $key => $value){
                $this->db->where($key,$value);
            }
        }else{
            $this->db->where($where);
        }

        $query = $this->db->get();
        return $query->result();
/*
        $items['num_err'] = $this->db->error();
        $items['mens_err'] = $this->db->error();
        return CRUD::__return($query, $items, $method);
        if ($items['num_err'] == 0) {
            foreach ($query->result() as $key => $value) {
                $result[][$key] = $value;
            }
            switch ($method) {
                case 'ajax':
                    $data = array('success' => true, 'result' => $result);
                    echo json_encode($data);
                    break;
            }
            return $result;
        }else{
            switch ($method) {
                case 'ajax':
                    $items['num_err'] = 'null';
                    detail_message($items, 'ERROR_AJAX');
                    break;
            }
            return FALSE;
        }*/
    }

    public function read_last($field, $table, $where='')
    {
        $items = array();
        $result = 0;
        $this->db->select($field);
        $this->db->from($table);
        if (is_array($where)) {
            $this->db->where($where);
        }
        $this->db->order_by($field, 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
         $items['num_err'] = $this->db->_error_number();
         $items['mens_err'] = $this->db->_error_message();

        if ($items['num_err'] == 0) {
            foreach ($query->result() as $key) {
                $result =  $key;
            }
            if(isset($result->$field)){
                $result = bcadd($result->$field,1);
            }else{
                $result= 1;
            }
        }
        return $result;
    }

    public function read_field_table($field, $table, $where='',$method='')
    {
        $this->db->select($field);
        $this->db->from($table);
        if(is_array($where)){
            $this->db->where($where);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function edit($table, $data, $whereId)
    {

        $this->db->where(key($whereId), $whereId[key($whereId)]);
        $this->db->update($table, $data);
        $items['num_err'] = $this->db->_error_number();
        $items['mens_err'] = $this->db->_error_message();
        detail_message($items, 'UPDATE');
    }

    public function edit_much()
    {

    }

    public function edit_all_where()
    {

    }

    public function edit_where()
    {

    }

    public function delete($table, $whereId, $method='')
    {

        $this->db->where($whereId);
        $this->db->delete($table);
        //echo $this->db->last_query();
        $items['num_err'] = $this->db->_error_number();
        $items['mens_err'] = $this->db->_error_message();

        switch ($method) {
            case 'ajax':
                if ($items['num_err'] == 0) {
                    detail_message($items, 'DELETE');
                } else {
                    detail_message($items, 'ERROR_AJAX');
                }
                break;
            case '':
                if ($items['num_err'] == 0) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
        }
        return NULL;
    }

    public function delete_much($table, $arrayId, $fieldKey)
    {
        $items = array();
        for ($i=0; $i<count($arrayId); $i++){
            $this->db->where($fieldKey, $arrayId[$i]);
            $this->db->delete($table);
            $items['num_err'] = $this->db->_error_number();
            $items['mens_err'] = $this->db->_error_message();
        }
        detail_message($items, 'DELETE');

    }

    public function delete_where()
    {

    }

    public function disable($table,$update,$where,$method)
    {

        $items = array();
        $this->db->where($where);
        $query = $this->db->update($table,$update);

        //echo $this->db->last_query();

        $items['num_err'] = $this->db->_error_number();
        $items['mens_err'] = $this->db->_error_message();
        return crud_model::__return($query, $items, $method);
    }

    public function disable_much()
    {

    }

    public function disable_all_where()
    {

    }

    public function enable()
    {

    }

    public function enable_much()
    {

    }

    public function enable_all_where()
    {

    }
}