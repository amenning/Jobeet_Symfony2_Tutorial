<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_80fad63aa704ab9a42737912182ca983787e94a3a2549e2b3e0f27943f2932b4 extends Twig_Template
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
        $__internal_bc227362794c4cac4fd7f7e33282692bc567e86567877bdc792453862967ddcc = $this->env->getExtension("native_profiler");
        $__internal_bc227362794c4cac4fd7f7e33282692bc567e86567877bdc792453862967ddcc->enter($__internal_bc227362794c4cac4fd7f7e33282692bc567e86567877bdc792453862967ddcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bc227362794c4cac4fd7f7e33282692bc567e86567877bdc792453862967ddcc->leave($__internal_bc227362794c4cac4fd7f7e33282692bc567e86567877bdc792453862967ddcc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
