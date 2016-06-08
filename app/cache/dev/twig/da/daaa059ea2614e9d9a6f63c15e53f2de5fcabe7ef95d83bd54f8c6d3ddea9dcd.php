<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_2758fd27da69271316c978e42dc73fec8d6ec24cbd4965a6ad01efb558296145 extends Twig_Template
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
        $__internal_6af0e7372bee2936b9ed42de6fccdeefa5d2c166f9b8e1ebe40c322e4b12b891 = $this->env->getExtension("native_profiler");
        $__internal_6af0e7372bee2936b9ed42de6fccdeefa5d2c166f9b8e1ebe40c322e4b12b891->enter($__internal_6af0e7372bee2936b9ed42de6fccdeefa5d2c166f9b8e1ebe40c322e4b12b891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6af0e7372bee2936b9ed42de6fccdeefa5d2c166f9b8e1ebe40c322e4b12b891->leave($__internal_6af0e7372bee2936b9ed42de6fccdeefa5d2c166f9b8e1ebe40c322e4b12b891_prof);

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
