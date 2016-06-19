<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_062fb0f23f19b8ec9eb5d56c73931e71b40e2d48b59a7f2b93896389cc8b0073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fee025fd9388181cde030df3e739f963bf2002226785371dd9d6cfc5ee758429 = $this->env->getExtension("native_profiler");
        $__internal_fee025fd9388181cde030df3e739f963bf2002226785371dd9d6cfc5ee758429->enter($__internal_fee025fd9388181cde030df3e739f963bf2002226785371dd9d6cfc5ee758429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee025fd9388181cde030df3e739f963bf2002226785371dd9d6cfc5ee758429->leave($__internal_fee025fd9388181cde030df3e739f963bf2002226785371dd9d6cfc5ee758429_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
