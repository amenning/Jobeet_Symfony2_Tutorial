<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_38211a1c0c8a0ce4c7bc6109f4624d9aa87556c37ee0b654fa05d2af775f5483 extends Twig_Template
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
        $__internal_d0c8fc742e2f6798faa2bfaea833fd9fa4e914efb651ea02ca57739812916d2e = $this->env->getExtension("native_profiler");
        $__internal_d0c8fc742e2f6798faa2bfaea833fd9fa4e914efb651ea02ca57739812916d2e->enter($__internal_d0c8fc742e2f6798faa2bfaea833fd9fa4e914efb651ea02ca57739812916d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d0c8fc742e2f6798faa2bfaea833fd9fa4e914efb651ea02ca57739812916d2e->leave($__internal_d0c8fc742e2f6798faa2bfaea833fd9fa4e914efb651ea02ca57739812916d2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
