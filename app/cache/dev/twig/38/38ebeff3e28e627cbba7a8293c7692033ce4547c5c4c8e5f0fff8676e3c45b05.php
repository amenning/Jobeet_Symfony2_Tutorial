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
        $__internal_23f47a87aae77b3bf159fa482e1d17225880c9252be6d985172151aa6067e119 = $this->env->getExtension("native_profiler");
        $__internal_23f47a87aae77b3bf159fa482e1d17225880c9252be6d985172151aa6067e119->enter($__internal_23f47a87aae77b3bf159fa482e1d17225880c9252be6d985172151aa6067e119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_23f47a87aae77b3bf159fa482e1d17225880c9252be6d985172151aa6067e119->leave($__internal_23f47a87aae77b3bf159fa482e1d17225880c9252be6d985172151aa6067e119_prof);

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
