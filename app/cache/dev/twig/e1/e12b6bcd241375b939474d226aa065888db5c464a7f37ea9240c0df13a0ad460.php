<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2b44b9cad5960fc63f91a186ccf8d5a5a0c85eb5944c97c9641e97091dbf86b1 extends Twig_Template
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
        $__internal_cfcdcc6328077188ad2b69d17229a66d6082ffa86c57051a7185e78dfad3f33f = $this->env->getExtension("native_profiler");
        $__internal_cfcdcc6328077188ad2b69d17229a66d6082ffa86c57051a7185e78dfad3f33f->enter($__internal_cfcdcc6328077188ad2b69d17229a66d6082ffa86c57051a7185e78dfad3f33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_cfcdcc6328077188ad2b69d17229a66d6082ffa86c57051a7185e78dfad3f33f->leave($__internal_cfcdcc6328077188ad2b69d17229a66d6082ffa86c57051a7185e78dfad3f33f_prof);

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
