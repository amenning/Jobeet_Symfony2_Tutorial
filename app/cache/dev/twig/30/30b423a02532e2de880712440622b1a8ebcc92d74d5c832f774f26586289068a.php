<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_eb59377c70a23a3d8f3928da190714db446603956ec48d1cac8f1de647b68247 extends Twig_Template
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
        $__internal_3bfce88a4438136d88ba0d434c5fac3750d332d134666cbb4ea9128fda2a7688 = $this->env->getExtension("native_profiler");
        $__internal_3bfce88a4438136d88ba0d434c5fac3750d332d134666cbb4ea9128fda2a7688->enter($__internal_3bfce88a4438136d88ba0d434c5fac3750d332d134666cbb4ea9128fda2a7688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3bfce88a4438136d88ba0d434c5fac3750d332d134666cbb4ea9128fda2a7688->leave($__internal_3bfce88a4438136d88ba0d434c5fac3750d332d134666cbb4ea9128fda2a7688_prof);

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
