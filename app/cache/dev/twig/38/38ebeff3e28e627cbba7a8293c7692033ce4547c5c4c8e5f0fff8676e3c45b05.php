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
        $__internal_84ef253b64890cbb89067569d59286e685e1b95adaa094d67b5b19e3b4971163 = $this->env->getExtension("native_profiler");
        $__internal_84ef253b64890cbb89067569d59286e685e1b95adaa094d67b5b19e3b4971163->enter($__internal_84ef253b64890cbb89067569d59286e685e1b95adaa094d67b5b19e3b4971163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_84ef253b64890cbb89067569d59286e685e1b95adaa094d67b5b19e3b4971163->leave($__internal_84ef253b64890cbb89067569d59286e685e1b95adaa094d67b5b19e3b4971163_prof);

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
