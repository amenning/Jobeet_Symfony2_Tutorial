<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ca8cf5ef3787a5cb62b9112c6f4201fc7f6a3df5a31298dc4383ecba58eaca3a extends Twig_Template
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
        $__internal_5489aa33562899563b8e6c6cff8e321be9e26fa1c33213652b368eb30e7f5756 = $this->env->getExtension("native_profiler");
        $__internal_5489aa33562899563b8e6c6cff8e321be9e26fa1c33213652b368eb30e7f5756->enter($__internal_5489aa33562899563b8e6c6cff8e321be9e26fa1c33213652b368eb30e7f5756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5489aa33562899563b8e6c6cff8e321be9e26fa1c33213652b368eb30e7f5756->leave($__internal_5489aa33562899563b8e6c6cff8e321be9e26fa1c33213652b368eb30e7f5756_prof);

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
