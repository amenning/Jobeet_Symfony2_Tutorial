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
        $__internal_170d97bb638233271f5754fc2bbb2ac484c40cb2ecf7474b40d2bdecfa75f76f = $this->env->getExtension("native_profiler");
        $__internal_170d97bb638233271f5754fc2bbb2ac484c40cb2ecf7474b40d2bdecfa75f76f->enter($__internal_170d97bb638233271f5754fc2bbb2ac484c40cb2ecf7474b40d2bdecfa75f76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_170d97bb638233271f5754fc2bbb2ac484c40cb2ecf7474b40d2bdecfa75f76f->leave($__internal_170d97bb638233271f5754fc2bbb2ac484c40cb2ecf7474b40d2bdecfa75f76f_prof);

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
