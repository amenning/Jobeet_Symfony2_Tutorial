<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8e8df107be22c397d6846f5e6384ae8fb8fe72c5db9bb64c5597685a3b09880b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c24ec3c384722940127bef83bedaedd153730019ed43c55f813f700dca9efa79 = $this->env->getExtension("native_profiler");
        $__internal_c24ec3c384722940127bef83bedaedd153730019ed43c55f813f700dca9efa79->enter($__internal_c24ec3c384722940127bef83bedaedd153730019ed43c55f813f700dca9efa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c24ec3c384722940127bef83bedaedd153730019ed43c55f813f700dca9efa79->leave($__internal_c24ec3c384722940127bef83bedaedd153730019ed43c55f813f700dca9efa79_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
