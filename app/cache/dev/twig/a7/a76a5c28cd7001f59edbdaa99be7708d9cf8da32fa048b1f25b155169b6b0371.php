<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_11c315d946e0e6d50ac5ceb32b68794e11857df14802536c91c2d56fb098e4a9 extends Twig_Template
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
        $__internal_a7008f89fe79bf4114180080aaf8f9b88168f8a429ba548ee69c92a79853223f = $this->env->getExtension("native_profiler");
        $__internal_a7008f89fe79bf4114180080aaf8f9b88168f8a429ba548ee69c92a79853223f->enter($__internal_a7008f89fe79bf4114180080aaf8f9b88168f8a429ba548ee69c92a79853223f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a7008f89fe79bf4114180080aaf8f9b88168f8a429ba548ee69c92a79853223f->leave($__internal_a7008f89fe79bf4114180080aaf8f9b88168f8a429ba548ee69c92a79853223f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
