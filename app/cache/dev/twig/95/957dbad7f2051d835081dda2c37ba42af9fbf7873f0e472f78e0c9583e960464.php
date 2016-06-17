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
        $__internal_bbd6728f7071d282f1b4c250fa1cc8d24229afff9eec7165d7d2a7eaed32ed58 = $this->env->getExtension("native_profiler");
        $__internal_bbd6728f7071d282f1b4c250fa1cc8d24229afff9eec7165d7d2a7eaed32ed58->enter($__internal_bbd6728f7071d282f1b4c250fa1cc8d24229afff9eec7165d7d2a7eaed32ed58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bbd6728f7071d282f1b4c250fa1cc8d24229afff9eec7165d7d2a7eaed32ed58->leave($__internal_bbd6728f7071d282f1b4c250fa1cc8d24229afff9eec7165d7d2a7eaed32ed58_prof);

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
