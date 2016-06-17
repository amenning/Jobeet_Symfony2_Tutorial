<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1d3340d33f8865b6c46e60c9170ff0506bbcb52ce0fd0a608ae8938be066e8a2 extends Twig_Template
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
        $__internal_140dcf752f807f97c9ccb1affe1c8e1f61b2eefd4e0709dde23f6ed9c28a2432 = $this->env->getExtension("native_profiler");
        $__internal_140dcf752f807f97c9ccb1affe1c8e1f61b2eefd4e0709dde23f6ed9c28a2432->enter($__internal_140dcf752f807f97c9ccb1affe1c8e1f61b2eefd4e0709dde23f6ed9c28a2432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_140dcf752f807f97c9ccb1affe1c8e1f61b2eefd4e0709dde23f6ed9c28a2432->leave($__internal_140dcf752f807f97c9ccb1affe1c8e1f61b2eefd4e0709dde23f6ed9c28a2432_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
