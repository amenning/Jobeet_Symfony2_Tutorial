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
        $__internal_85b178b3a3a4c7dfb5ca3bde8a9b53c292d74f76921b29cdabf96ddab63c9ef3 = $this->env->getExtension("native_profiler");
        $__internal_85b178b3a3a4c7dfb5ca3bde8a9b53c292d74f76921b29cdabf96ddab63c9ef3->enter($__internal_85b178b3a3a4c7dfb5ca3bde8a9b53c292d74f76921b29cdabf96ddab63c9ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_85b178b3a3a4c7dfb5ca3bde8a9b53c292d74f76921b29cdabf96ddab63c9ef3->leave($__internal_85b178b3a3a4c7dfb5ca3bde8a9b53c292d74f76921b29cdabf96ddab63c9ef3_prof);

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
