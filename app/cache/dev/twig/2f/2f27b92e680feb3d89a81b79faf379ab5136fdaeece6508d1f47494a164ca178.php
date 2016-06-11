<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f10c2b86ce8887093447dd302deeec66ffc19ee1a0ea5291fe728d9b383e0b0e extends Twig_Template
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
        $__internal_5b5aad4a60ed067c6825dcd7cb530e5f1578c41c56c16ae39141939564ca5c0f = $this->env->getExtension("native_profiler");
        $__internal_5b5aad4a60ed067c6825dcd7cb530e5f1578c41c56c16ae39141939564ca5c0f->enter($__internal_5b5aad4a60ed067c6825dcd7cb530e5f1578c41c56c16ae39141939564ca5c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5b5aad4a60ed067c6825dcd7cb530e5f1578c41c56c16ae39141939564ca5c0f->leave($__internal_5b5aad4a60ed067c6825dcd7cb530e5f1578c41c56c16ae39141939564ca5c0f_prof);

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
