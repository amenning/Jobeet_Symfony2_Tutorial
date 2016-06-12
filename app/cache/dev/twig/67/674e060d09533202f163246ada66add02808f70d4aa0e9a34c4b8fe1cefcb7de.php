<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6ba8522cb1fc8027ea6e9233ec9c2a511b0ca5b12a335f0cd22d9a54e0d60aa3 extends Twig_Template
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
        $__internal_61ee79143ef6b855d37315bd2b8497c316a930e5e37cb11021da8fb102b5bc0c = $this->env->getExtension("native_profiler");
        $__internal_61ee79143ef6b855d37315bd2b8497c316a930e5e37cb11021da8fb102b5bc0c->enter($__internal_61ee79143ef6b855d37315bd2b8497c316a930e5e37cb11021da8fb102b5bc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_61ee79143ef6b855d37315bd2b8497c316a930e5e37cb11021da8fb102b5bc0c->leave($__internal_61ee79143ef6b855d37315bd2b8497c316a930e5e37cb11021da8fb102b5bc0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
