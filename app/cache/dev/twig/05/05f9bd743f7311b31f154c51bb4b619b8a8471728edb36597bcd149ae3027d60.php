<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9e18fb473d54c545245d292a89ca5d295c194e00c8e5bbe2ee07d52d143b6c33 extends Twig_Template
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
        $__internal_b9561d4a76d1f9e8b0103e4abb0708aa3b477dd9247fd31431b8334ecb5138fa = $this->env->getExtension("native_profiler");
        $__internal_b9561d4a76d1f9e8b0103e4abb0708aa3b477dd9247fd31431b8334ecb5138fa->enter($__internal_b9561d4a76d1f9e8b0103e4abb0708aa3b477dd9247fd31431b8334ecb5138fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b9561d4a76d1f9e8b0103e4abb0708aa3b477dd9247fd31431b8334ecb5138fa->leave($__internal_b9561d4a76d1f9e8b0103e4abb0708aa3b477dd9247fd31431b8334ecb5138fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
