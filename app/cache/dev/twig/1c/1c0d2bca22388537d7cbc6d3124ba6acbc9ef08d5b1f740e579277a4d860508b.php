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
        $__internal_53d84ffe28c2cc69d077cc33261e625b5bdacb879fd48c1e57658effb4184c97 = $this->env->getExtension("native_profiler");
        $__internal_53d84ffe28c2cc69d077cc33261e625b5bdacb879fd48c1e57658effb4184c97->enter($__internal_53d84ffe28c2cc69d077cc33261e625b5bdacb879fd48c1e57658effb4184c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_53d84ffe28c2cc69d077cc33261e625b5bdacb879fd48c1e57658effb4184c97->leave($__internal_53d84ffe28c2cc69d077cc33261e625b5bdacb879fd48c1e57658effb4184c97_prof);

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
