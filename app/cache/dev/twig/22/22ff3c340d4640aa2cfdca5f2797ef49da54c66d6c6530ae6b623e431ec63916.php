<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c5f7fb753956089f5fdd93d814f2e985dd12bbfc5ec8a19e958722afca5bb4af extends Twig_Template
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
        $__internal_75fee96bab3217f7ef59589a34be510edfe6b6df1c7c47e1b10b71c316a2f099 = $this->env->getExtension("native_profiler");
        $__internal_75fee96bab3217f7ef59589a34be510edfe6b6df1c7c47e1b10b71c316a2f099->enter($__internal_75fee96bab3217f7ef59589a34be510edfe6b6df1c7c47e1b10b71c316a2f099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_75fee96bab3217f7ef59589a34be510edfe6b6df1c7c47e1b10b71c316a2f099->leave($__internal_75fee96bab3217f7ef59589a34be510edfe6b6df1c7c47e1b10b71c316a2f099_prof);

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
