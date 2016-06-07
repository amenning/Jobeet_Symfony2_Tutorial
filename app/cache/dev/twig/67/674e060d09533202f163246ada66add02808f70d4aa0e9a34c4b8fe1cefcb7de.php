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
        $__internal_b74f4f2ed5bbce28d72c5b72c392bfa5636831c127a18ff3b3e8fd1c50246ee9 = $this->env->getExtension("native_profiler");
        $__internal_b74f4f2ed5bbce28d72c5b72c392bfa5636831c127a18ff3b3e8fd1c50246ee9->enter($__internal_b74f4f2ed5bbce28d72c5b72c392bfa5636831c127a18ff3b3e8fd1c50246ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b74f4f2ed5bbce28d72c5b72c392bfa5636831c127a18ff3b3e8fd1c50246ee9->leave($__internal_b74f4f2ed5bbce28d72c5b72c392bfa5636831c127a18ff3b3e8fd1c50246ee9_prof);

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
