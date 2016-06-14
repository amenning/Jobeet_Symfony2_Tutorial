<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_411e65385cce77576c1388fc9a2e2b282899a35d851cef67ae02e40e0a4e6db7 extends Twig_Template
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
        $__internal_3bc7806e118f090a54c52d8e5c49508308b3bc942c35b059adcaa9c80ae55977 = $this->env->getExtension("native_profiler");
        $__internal_3bc7806e118f090a54c52d8e5c49508308b3bc942c35b059adcaa9c80ae55977->enter($__internal_3bc7806e118f090a54c52d8e5c49508308b3bc942c35b059adcaa9c80ae55977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3bc7806e118f090a54c52d8e5c49508308b3bc942c35b059adcaa9c80ae55977->leave($__internal_3bc7806e118f090a54c52d8e5c49508308b3bc942c35b059adcaa9c80ae55977_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
