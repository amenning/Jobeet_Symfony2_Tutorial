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
        $__internal_160b18ba606c2e4306e6bf56935010dbbfda413e1c006da9d102a5b9b2c608a8 = $this->env->getExtension("native_profiler");
        $__internal_160b18ba606c2e4306e6bf56935010dbbfda413e1c006da9d102a5b9b2c608a8->enter($__internal_160b18ba606c2e4306e6bf56935010dbbfda413e1c006da9d102a5b9b2c608a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_160b18ba606c2e4306e6bf56935010dbbfda413e1c006da9d102a5b9b2c608a8->leave($__internal_160b18ba606c2e4306e6bf56935010dbbfda413e1c006da9d102a5b9b2c608a8_prof);

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
