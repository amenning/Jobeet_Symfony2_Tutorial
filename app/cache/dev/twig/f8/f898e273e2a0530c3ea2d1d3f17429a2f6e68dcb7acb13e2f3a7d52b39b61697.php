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
        $__internal_a0f2e6d6a834282ebc419071397797b6a94e1b168d2eaba5d76047d1fb673589 = $this->env->getExtension("native_profiler");
        $__internal_a0f2e6d6a834282ebc419071397797b6a94e1b168d2eaba5d76047d1fb673589->enter($__internal_a0f2e6d6a834282ebc419071397797b6a94e1b168d2eaba5d76047d1fb673589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a0f2e6d6a834282ebc419071397797b6a94e1b168d2eaba5d76047d1fb673589->leave($__internal_a0f2e6d6a834282ebc419071397797b6a94e1b168d2eaba5d76047d1fb673589_prof);

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
