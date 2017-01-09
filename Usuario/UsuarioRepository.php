<?php
/**
 * Created by PhpStorm.
 * User: terainfor
 * Date: 09/01/17
 * Time: 02:45
 */

namespace Allugator\V1\Rest\Usuario;


use Zend\Db\TableGateway\AbstractTableGateway;

class UsuarioRepository
{

    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function findAll(){
        $select = $this->tableGateway->getSql()->select();
        $sql = $this->tableGateway->selectWith($select);
        return $sql;
    }

    public function find($email){
        $select = $this->tableGateway->getSql()->select()->where('usuario.email="'.$email.'"');
        $sql = $this->tableGateway->selectWith($select);
        return $sql;
    }
}