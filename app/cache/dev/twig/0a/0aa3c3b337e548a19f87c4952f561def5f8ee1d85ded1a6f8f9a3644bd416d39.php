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
        $__internal_39113a4e2fa385cdf5b207f670a1a4c76e465030e9ce1ea9e6491a9794cba81b = $this->env->getExtension("native_profiler");
        $__internal_39113a4e2fa385cdf5b207f670a1a4c76e465030e9ce1ea9e6491a9794cba81b->enter($__internal_39113a4e2fa385cdf5b207f670a1a4c76e465030e9ce1ea9e6491a9794cba81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_39113a4e2fa385cdf5b207f670a1a4c76e465030e9ce1ea9e6491a9794cba81b->leave($__internal_39113a4e2fa385cdf5b207f670a1a4c76e465030e9ce1ea9e6491a9794cba81b_prof);

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
