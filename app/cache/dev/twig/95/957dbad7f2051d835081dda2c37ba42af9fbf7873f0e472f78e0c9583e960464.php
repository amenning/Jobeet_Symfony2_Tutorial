<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_0e975b0927946b2f39c22f0d4b6613ad355b50b88d0689791907fd92d0b7ddea extends Twig_Template
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
        $__internal_610d0456a6df9fb1f1f26f7685e935745b72e29cb00c5ee0a59fa653e34eb6cd = $this->env->getExtension("native_profiler");
        $__internal_610d0456a6df9fb1f1f26f7685e935745b72e29cb00c5ee0a59fa653e34eb6cd->enter($__internal_610d0456a6df9fb1f1f26f7685e935745b72e29cb00c5ee0a59fa653e34eb6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_610d0456a6df9fb1f1f26f7685e935745b72e29cb00c5ee0a59fa653e34eb6cd->leave($__internal_610d0456a6df9fb1f1f26f7685e935745b72e29cb00c5ee0a59fa653e34eb6cd_prof);

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
