<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_00408ee61b237a9da5ce27879aa1939bf6116e316f0c96dc60f34ae7fffdcc4c extends Twig_Template
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
        $__internal_01a67459f2f9e51f0ac8ab599d9cb8335b5a6d7999e9963daddce4d5b46e3c22 = $this->env->getExtension("native_profiler");
        $__internal_01a67459f2f9e51f0ac8ab599d9cb8335b5a6d7999e9963daddce4d5b46e3c22->enter($__internal_01a67459f2f9e51f0ac8ab599d9cb8335b5a6d7999e9963daddce4d5b46e3c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_01a67459f2f9e51f0ac8ab599d9cb8335b5a6d7999e9963daddce4d5b46e3c22->leave($__internal_01a67459f2f9e51f0ac8ab599d9cb8335b5a6d7999e9963daddce4d5b46e3c22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
