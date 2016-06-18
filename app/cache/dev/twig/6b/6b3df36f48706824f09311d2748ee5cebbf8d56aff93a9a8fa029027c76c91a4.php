<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_969cdfa61a3ac374c2e12f21d970e9a831d4b258b6ebf0f8396faa84e85969d2 extends Twig_Template
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
        $__internal_90291d846871e77b4018bff2daf30141fda308609f6a6811d9be8bf0fce3bf48 = $this->env->getExtension("native_profiler");
        $__internal_90291d846871e77b4018bff2daf30141fda308609f6a6811d9be8bf0fce3bf48->enter($__internal_90291d846871e77b4018bff2daf30141fda308609f6a6811d9be8bf0fce3bf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_90291d846871e77b4018bff2daf30141fda308609f6a6811d9be8bf0fce3bf48->leave($__internal_90291d846871e77b4018bff2daf30141fda308609f6a6811d9be8bf0fce3bf48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
