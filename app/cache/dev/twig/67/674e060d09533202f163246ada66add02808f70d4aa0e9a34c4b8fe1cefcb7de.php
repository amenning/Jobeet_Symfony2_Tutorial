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
        $__internal_f2ab8f00b8f84c03e4c02da8a81c459edc1e404f2258b7d7527a6dc14fff39e2 = $this->env->getExtension("native_profiler");
        $__internal_f2ab8f00b8f84c03e4c02da8a81c459edc1e404f2258b7d7527a6dc14fff39e2->enter($__internal_f2ab8f00b8f84c03e4c02da8a81c459edc1e404f2258b7d7527a6dc14fff39e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f2ab8f00b8f84c03e4c02da8a81c459edc1e404f2258b7d7527a6dc14fff39e2->leave($__internal_f2ab8f00b8f84c03e4c02da8a81c459edc1e404f2258b7d7527a6dc14fff39e2_prof);

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
