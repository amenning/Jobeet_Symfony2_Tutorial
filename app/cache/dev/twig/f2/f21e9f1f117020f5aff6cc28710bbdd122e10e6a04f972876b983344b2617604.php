<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_f1d2f9b2d68a3c8392477921d9305fceb0f49398d956e0f95e01c724093b0f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90f2a93414db72803ab8d2d2601a8af9ad98d385e7b442b3fa68b6b245b34591 = $this->env->getExtension("native_profiler");
        $__internal_90f2a93414db72803ab8d2d2601a8af9ad98d385e7b442b3fa68b6b245b34591->enter($__internal_90f2a93414db72803ab8d2d2601a8af9ad98d385e7b442b3fa68b6b245b34591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f2a93414db72803ab8d2d2601a8af9ad98d385e7b442b3fa68b6b245b34591->leave($__internal_90f2a93414db72803ab8d2d2601a8af9ad98d385e7b442b3fa68b6b245b34591_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
