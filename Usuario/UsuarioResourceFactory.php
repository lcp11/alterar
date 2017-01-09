<?php
namespace Allugator\V1\Rest\Usuario;

class UsuarioResourceFactory
{
    public function __invoke($services)
    {
        return new UsuarioResource($services->get('Allugator\\V1\\Rest\\Usuario\\UsuarioRepository'));
    }
}
