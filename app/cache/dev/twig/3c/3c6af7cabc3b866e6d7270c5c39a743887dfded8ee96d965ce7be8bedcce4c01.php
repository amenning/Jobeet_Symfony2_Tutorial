<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_7244febea242aa970ed3dd9925aa3ecc56dafcc45f7ec0d7292ca6b0c1f6da76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ecf518295164f847ae90172318e167aa31a8cf453384912ce3acddfa678b30b = $this->env->getExtension("native_profiler");
        $__internal_2ecf518295164f847ae90172318e167aa31a8cf453384912ce3acddfa678b30b->enter($__internal_2ecf518295164f847ae90172318e167aa31a8cf453384912ce3acddfa678b30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecf518295164f847ae90172318e167aa31a8cf453384912ce3acddfa678b30b->leave($__internal_2ecf518295164f847ae90172318e167aa31a8cf453384912ce3acddfa678b30b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
