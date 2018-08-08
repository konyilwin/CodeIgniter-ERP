###################
What is CRUD model
###################

The CRUD function - Create, Read, Edit, Disable, Enable and Delete
permite simplificar notablemente las cominicaciones con la base de datos
de modo que se puede precindir otros modelos usando solo le metodo crud
desde el controlador no se requiere funciones adicionales.

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