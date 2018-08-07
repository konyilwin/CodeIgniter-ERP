<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * -------------------------------------------------------------------------------
 * Functions CRUD  - Create, Read, Edit, Disable, Enable and Delete
 * -------------------------------------------------------------------------------
 *
 * CRUD_MODEL version 1.0.1
 *
 * Created by PhpStorm.
 * User: Jasp402
 * Date: 27/12/2016
 * Time: 9:43 AM
 *
 * @category   global_models
 * @author     Jesús Pérez
 * @copyright  2016-12 jasp402@gmail.com
 * @version    0.0.1
 *
 *
 * __getAll          ----> Es un constructor de 'read' pasado el nombre de la entidad a consultar
 * -----------------------------------------------------------------------------------------------------------
 * create            ----> Registra un nuevo elemento en base de datos
 * create_much       ----> Correr una array e insertar varios elementos
 * -----------------------------------------------------------------------------------------------------------
 * read              ----> <<getAll>> lee todos los elementos de una <<tabla>>
 * read_id           ----> <<getAllByID>> retorna todos los valores del ID pasado
 * read_field_table  ----> Retorna el campo solicitado ejemplo: << db->select('cod_key') >>
 * read_where        ----><<getAllByWhere>> retorna todos los valores de tabla <donde|where> sirve como un filtro
 * read_last         ----> Retorna el ultimo valor solicitado. ORDER_BY = DESC, LIMIT = 1
 * -----------------------------------------------------------------------------------------------------------
 * read_data_table   ----> Realiza un <<select>> <<donde|where>> retorna el valor en formato  (DataTable)
 * -----------------------------------------------------------------------------------------------------------
 * edit              ----> Editar un elemento pasado el ID
 * edit_much         ----> Corre (2) array con todos los Id's a editar y otro con los dato a modificar por Id
 * edit_all_where    ----> realiza un <<Upload>> de todos los elementos de la tabla <<donde|where>>
 * edit_where        ----> editar un elemento pasado un ID <<donde|where>>
 * -----------------------------------------------------------------------------------------------------------
 * delete            ----> Elimina el elemento pasado el ID
 * delete_much       ----> Corre un array con todos los Id's a eliminar de la tabla
 * delete_where      ----> Eliminar un elemento pasado el ID <<donde|where>>
 * -----------------------------------------------------------------------------------------------------------
 * disable           ----> Cambia de 'estado' (i|inactivo)  a un elemento pasado el ID
 * disable_much      ----> Corre un array con todos los Id's que se van ha desabilitar (disable)
 * disable_all_where ----> desabilita todos los elementos de la tabla <<donde|were>>
 * -----------------------------------------------------------------------------------------------------------
 * enable            ----> Habilita un elemento que fue desabilitado <<disable>>
 * enable_much       ----> El proceso inverso de <<disable_much>>
 * enable_all_where  ----> El proceso inverso de <<disable_all_much>>
 *
 * @method  crud_model $__return   |   Es un construct para los valores de retorno. segun las necesidades del sistema
 **/
class CRUD extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * ---------------------------------------------------------------------------------------------------------------
     * __return
     * ---------------------------------------------------------------------------------------------------------------
     * Es un construct para los valores de retorno. segun las necesidades del sistema
     *
     * @param $query  | $query->db->result()
     * @param $items  | _error_number() & _error_message()
     * @param $method | void, php, ajax, sync,
     *
     * @return string | array ó JSON
     */
    private function __return($query, $items, $method)
    {
        //success | en caso de ejecutar se correctamente el query
        if ($items['num_err'] == 0) {
            switch ($method){
                case '':
                    $result = array();
                    foreach ($query->result() as $key) {
                        $result[] = $key;
                    }
                    break;
                case 'php':
                    break;
                case 'ajax':
                    break;
                case 'sync':
                    $result = detail_message($items, 'UPDATE_SYNC');
                    break;
            }
               //error | en caso de que exista algún error en la consulta.
        } else {
            switch ($method){
                case '':
                    $items['num_err'] = 'null';
                    $result = detail_message($items, 'ERROR');
                    break;
                case 'php':
                    break;
                case 'ajax':
                    break;
                case 'sync':
                    break;
            }
        }
        return $result;
    }

    /**
     * ---------------------------------------------------------------------------------------------------------------
     * __getAll (version 1.1.2)
     * ---------------------------------------------------------------------------------------------------------------
     * Es un constructor de 'read' pasado el nombre de la entidad sin el prefix 'sys_' o la tabla a consultar
     * admite multipes condicionales 'WHERE';
     * en caso de ERROR retorna alerta en el view mediante <<detail_message()>>
     *
     * @param   string $entity
     * @param   string $where Array();
     * @param   string $method          "Tipo de retorno para esta función"
     *
     * @return  string $__return
     **/
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
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * create  (version 1.1)
     * ---------------------------------------------------------------------------------------------------------------
     * Inserta un elementos en la base de datos << $this->db->insert() >>
     * retorna mensaje :: [TRUE]->registro exitoso | [FALSE]->_error_number & _error_message
     *
     * @param   string $table
     * @param   array $data
     *
     * @return    void
     **/
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
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * create_much (version 1.2)
     * ---------------------------------------------------------------------------------------------------------------
     * Correr una array e insertar varios elementos [Solo admite Matriz]
     * ToDo - falta validar en caso de que el array no sea una matriz bidimencional
     *
     * @param   string $table
     * @param   array $array
     * @param   string $method
     *
     *
     * @return    boolean
     **/
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
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * read
     * ---------------------------------------------------------------------------------------------------------------
     * <<getAll>> lee y retorna todos [*] los elementos de una <<tabla>>
     *
     * @param   string $table
     *
     * @return  string
     **/
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
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * read_data_table
     * ---------------------------------------------------------------------------------------------------------------
     * Realiza un << $this->db->select() >> con un condicional << $this->db->where() >>
     * retorna el valor en formato << DataTable >> JSON para consultas ajax
     *
     * @param   string $table
     * @param   string $where
     *
     * @return  string
     **/
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
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * read_id
     * ---------------------------------------------------------------------------------------------------------------
     * <<getAllByID>> retorna todos los valores del ID pasado
     *
     * @param   string $table
     * @param   array $whereId
     * @param   string $method
     *
     * @return  string
     **/
    public function read_id($table, $whereId, $method = '')
    {

        $items = array();
        $result = array();
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where(key($whereId), $whereId[key($whereId)]);
        $query = $this->db->get();

        $items['num_err'] = $this->db->_error_number();
        $items['mens_err'] = $this->db->_error_message();

        foreach ($query->result() as $key => $value) {
            $result[$key] = $value;
        }

        switch ($method) {
            case 'ajax':
                if ($items['num_err'] == 0) {
                    $data = array('success' => true, 'result' => $result);
                    echo json_encode($data);
                } else {
                    $data = array('success' => false);
                    echo json_encode($data);
                }
                break;
        }

        if ($items['num_err'] == 0) {
            return $result;
        } else {
            return FALSE;
        }

    }
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * read_where
     * ---------------------------------------------------------------------------------------------------------------
     * <<getAllByWhere>> retorna todos los valores de tabla <donde|where> sirve como un filtro
     *
     * @param   string $table
     * @param   array $where
     * @param   string $method
     *
     * @return  string
     **/
    public function read_where($table, $where, $method = '')
    {
        $items = array();
        $result = array();

        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();

        $items['num_err'] = $this->db->_error_number();
        $items['mens_err'] = $this->db->_error_message();

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
        }
    }


    /**
     * ---------------------------------------------------------------------------------------------------------------
     * read_last
     * ---------------------------------------------------------------------------------------------------------------
     * Retorna el ultimo valor solicitado. ORDER_BY = DESC, LIMIT = 1 | AUTO_INCREMENT
     *
     * @param   string $field
     * @param   string $table
     * @param   string $where  | array
     *
     * @return  string
     **/
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

    /**
     * ---------------------------------------------------------------------------------------------------------------
     * read_field_table
     * ---------------------------------------------------------------------------------------------------------------
     * Retorna el campo solicitado ejemplo: << db->select('cod_key') >>
     *
     * @param   string $table
     * @param   string $field
     * @param   string $where
     * @param   string $method
     *
     * @return  string
     **/
    public function read_field_table($field, $table, $where='',$method='')
    {

        $items = array();
        $result = array();

        $this->db->select($field);
        $this->db->from($table);
        if(is_array($where)){
            $this->db->where($where);
        }
        $query = $this->db->get();
        $items['num_err'] = $this->db->_error_number();
        $items['mens_err'] = $this->db->_error_message();
        foreach ($query->result() as $key => $value) {
            $result[$key] = $value;
        }
        switch ($method) {
            case 'ajax':
                if ($result) {
                    $data = array('success' => true, 'result' => $result);
                    echo json_encode($data);
                } else {
                    $data = array('success' => false);
                    echo json_encode($data);
                }
                break;
        }
        if ($items['num_err'] == 0) {
            return $result;
        } else {
            return FALSE;
        }

    }
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * edit
     * ---------------------------------------------------------------------------------------------------------------
     * Editar un elemento pasado el ID
     *
     * @param   string $table
     * @param   array $data
     * @param   array $whereId
     *
     * @return  void
     **/
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
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * delete (version 1.1)
     * ---------------------------------------------------------------------------------------------------------------
     * Elimina el elemento pasado el ID
     *
     * @param   string $table
     * @param   array $whereId
     * @param   string $method
     *
     * @return  string
     **/
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
    /**
     * ---------------------------------------------------------------------------------------------------------------
     * delete_much
     * ---------------------------------------------------------------------------------------------------------------
     * Elimina el elemento pasado el ID <<deleteSelect>>
     *
     * @param   string $table
     * @param   array $arrayId
     * @param   string $fieldKey
     *
     * @return  void
     **/
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

    /**
     * ---------------------------------------------------------------------------------------------------------------
     * disable
     * ---------------------------------------------------------------------------------------------------------------
     * Cambia de 'estado' (i|inactivo)  a un elemento pasado el ID
     *
     * @param   string $table
     * @param   array $where
     * @param   string $method @options ajax,php,sync
     *
     * @return  string $__return
     **/
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
//