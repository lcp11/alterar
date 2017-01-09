<?php
namespace Allugator\V1\Rest\Usuario;

class UsuarioEntity
{
    protected $idusuario;
    protected $roleid;

    /**
     * @return mixed
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * @param mixed $idusuario
     * @return UsuarioEntity
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * @param mixed $roleid
     * @return UsuarioEntity
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;
        return $this;
    }

    
}
