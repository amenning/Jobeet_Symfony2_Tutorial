<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_ceda0ae1d17ed3384c32db74a2f9015a21f300ba3410fd1fcf0224aad0ea6c54 extends Twig_Template
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
        $__internal_138746bd29f4cf3380e2d30a844b34bc6b4d5f9b3e285b9a5f50b762d1d4c229 = $this->env->getExtension("native_profiler");
        $__internal_138746bd29f4cf3380e2d30a844b34bc6b4d5f9b3e285b9a5f50b762d1d4c229->enter($__internal_138746bd29f4cf3380e2d30a844b34bc6b4d5f9b3e285b9a5f50b762d1d4c229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_138746bd29f4cf3380e2d30a844b34bc6b4d5f9b3e285b9a5f50b762d1d4c229->leave($__internal_138746bd29f4cf3380e2d30a844b34bc6b4d5f9b3e285b9a5f50b762d1d4c229_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
