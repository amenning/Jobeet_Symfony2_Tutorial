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
        $__internal_a9882f629d81fdb210792dfff56a3d6d225eb59ae8384ce6c64e106c81e115da = $this->env->getExtension("native_profiler");
        $__internal_a9882f629d81fdb210792dfff56a3d6d225eb59ae8384ce6c64e106c81e115da->enter($__internal_a9882f629d81fdb210792dfff56a3d6d225eb59ae8384ce6c64e106c81e115da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a9882f629d81fdb210792dfff56a3d6d225eb59ae8384ce6c64e106c81e115da->leave($__internal_a9882f629d81fdb210792dfff56a3d6d225eb59ae8384ce6c64e106c81e115da_prof);

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
