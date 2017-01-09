<?php
namespace Allugator\V1\Rest\Busca;

class BuscaResourceFactory
{
    public function __invoke($services)
    {
        return new BuscaResource($services->get('Allugator\\V1\\Rest\\Busca\\BuscaRepository'));
    }
}
