<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d6d798d657b8eb02813135615eadd283341121eb6896fe87221811da1d66c7a1 extends Twig_Template
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
        $__internal_d1533829e196fc64a1c90c0003cb93c09881635e724093a6c11c03c0afc4aed9 = $this->env->getExtension("native_profiler");
        $__internal_d1533829e196fc64a1c90c0003cb93c09881635e724093a6c11c03c0afc4aed9->enter($__internal_d1533829e196fc64a1c90c0003cb93c09881635e724093a6c11c03c0afc4aed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_d1533829e196fc64a1c90c0003cb93c09881635e724093a6c11c03c0afc4aed9->leave($__internal_d1533829e196fc64a1c90c0003cb93c09881635e724093a6c11c03c0afc4aed9_prof);

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
