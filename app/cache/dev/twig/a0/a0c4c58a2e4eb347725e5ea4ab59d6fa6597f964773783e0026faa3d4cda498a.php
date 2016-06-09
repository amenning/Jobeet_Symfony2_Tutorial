<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_163af31a39c25a4623b4779203658feb897099243404e60497c410989b203b3a extends Twig_Template
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
        $__internal_00264bcf2a7dfcbdfc13d8fe0e932c578bcefcbc80b04560d1e38547436bc609 = $this->env->getExtension("native_profiler");
        $__internal_00264bcf2a7dfcbdfc13d8fe0e932c578bcefcbc80b04560d1e38547436bc609->enter($__internal_00264bcf2a7dfcbdfc13d8fe0e932c578bcefcbc80b04560d1e38547436bc609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_00264bcf2a7dfcbdfc13d8fe0e932c578bcefcbc80b04560d1e38547436bc609->leave($__internal_00264bcf2a7dfcbdfc13d8fe0e932c578bcefcbc80b04560d1e38547436bc609_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
