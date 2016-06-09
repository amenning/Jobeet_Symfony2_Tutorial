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
        $__internal_e0070b5cfa284f1bbca4be40460f557b6e9dd67ae113141972511fc521a3fb8c = $this->env->getExtension("native_profiler");
        $__internal_e0070b5cfa284f1bbca4be40460f557b6e9dd67ae113141972511fc521a3fb8c->enter($__internal_e0070b5cfa284f1bbca4be40460f557b6e9dd67ae113141972511fc521a3fb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e0070b5cfa284f1bbca4be40460f557b6e9dd67ae113141972511fc521a3fb8c->leave($__internal_e0070b5cfa284f1bbca4be40460f557b6e9dd67ae113141972511fc521a3fb8c_prof);

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
