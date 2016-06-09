<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7417284705f5611505655dd290b2abd32bb68067a08aa9decf73f32eb07c7389 extends Twig_Template
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
        $__internal_1eafb6a8a7a36f9d4c43d71129eef5c91de95424a6626ae92cc5ce4113566dd6 = $this->env->getExtension("native_profiler");
        $__internal_1eafb6a8a7a36f9d4c43d71129eef5c91de95424a6626ae92cc5ce4113566dd6->enter($__internal_1eafb6a8a7a36f9d4c43d71129eef5c91de95424a6626ae92cc5ce4113566dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1eafb6a8a7a36f9d4c43d71129eef5c91de95424a6626ae92cc5ce4113566dd6->leave($__internal_1eafb6a8a7a36f9d4c43d71129eef5c91de95424a6626ae92cc5ce4113566dd6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
