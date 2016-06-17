<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_08b27e236b426474d0138b3d46ad80433253d566a2efaa01f5b3d5b339acc521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "@SonataAdmin/CRUD/history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32e766a5514a4c5ac633b25e68306ec9e84d1ab53dd06a64d50b40961b5eb181 = $this->env->getExtension("native_profiler");
        $__internal_32e766a5514a4c5ac633b25e68306ec9e84d1ab53dd06a64d50b40961b5eb181->enter($__internal_32e766a5514a4c5ac633b25e68306ec9e84d1ab53dd06a64d50b40961b5eb181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32e766a5514a4c5ac633b25e68306ec9e84d1ab53dd06a64d50b40961b5eb181->leave($__internal_32e766a5514a4c5ac633b25e68306ec9e84d1ab53dd06a64d50b40961b5eb181_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
