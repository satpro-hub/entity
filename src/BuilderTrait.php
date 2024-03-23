<?php

namespace SatproHub\Entity\Traits;

trait BuilderTrait
{
    protected $type;
    protected $methods = [
        "getAll",
        "getById",
        "create",
        "update",
        "delete",
    ];

    public function build(): string
    {
        $msg = $this->startBuild();
        $msg .= $this->startInterfaceBuild();
        $msg .= $this->buildMethods();
        $msg .= $this->endBuild();
        return $msg;
    }

    private function startBuild(): string
    {
        return "<?php\n\n";
    }

    private function startInterfaceBuild()
    {
        return "namespace App\\" . $this->directory . "\\" . $this->entity->path . ";\n\ninterface " . $this->entity->name . $this->postfix . "\n{";
    }

    private function buildMethods(): string
    {
        $out = "\n";
        foreach ($this->methods as $method) {
            $out .= "public function " . $method . "();\n\n";
        }
        return $out;
    }

    private function endBuild(): string
    {
        return "}";
    }
}
