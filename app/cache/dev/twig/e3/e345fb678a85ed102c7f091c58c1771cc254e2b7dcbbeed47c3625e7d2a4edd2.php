<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9617b8235cfc96700337fe828cb026d5adfdf99cde86ef53b5ad37083cee0e0e extends Twig_Template
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
        $__internal_b68b9084a6773b0b0aa5f85d8d22ea945f50d9a645029830058c490757eb72b4 = $this->env->getExtension("native_profiler");
        $__internal_b68b9084a6773b0b0aa5f85d8d22ea945f50d9a645029830058c490757eb72b4->enter($__internal_b68b9084a6773b0b0aa5f85d8d22ea945f50d9a645029830058c490757eb72b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b68b9084a6773b0b0aa5f85d8d22ea945f50d9a645029830058c490757eb72b4->leave($__internal_b68b9084a6773b0b0aa5f85d8d22ea945f50d9a645029830058c490757eb72b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
