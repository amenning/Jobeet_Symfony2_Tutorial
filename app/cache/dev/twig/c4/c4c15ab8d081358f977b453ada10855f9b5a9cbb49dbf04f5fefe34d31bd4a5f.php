<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_ac455879854ec9da1199750987d707ca69429155c55f92e8be0af9664422f363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1041c88147aed90bc62b26cff2524edb59da91479d1dc2f1ec03c4f5bbb46a4a = $this->env->getExtension("native_profiler");
        $__internal_1041c88147aed90bc62b26cff2524edb59da91479d1dc2f1ec03c4f5bbb46a4a->enter($__internal_1041c88147aed90bc62b26cff2524edb59da91479d1dc2f1ec03c4f5bbb46a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1041c88147aed90bc62b26cff2524edb59da91479d1dc2f1ec03c4f5bbb46a4a->leave($__internal_1041c88147aed90bc62b26cff2524edb59da91479d1dc2f1ec03c4f5bbb46a4a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d7008d6a129ea84a50fefbc2205d0875bf5e4211e8f1312b7df0269fc2eb3446 = $this->env->getExtension("native_profiler");
        $__internal_d7008d6a129ea84a50fefbc2205d0875bf5e4211e8f1312b7df0269fc2eb3446->enter($__internal_d7008d6a129ea84a50fefbc2205d0875bf5e4211e8f1312b7df0269fc2eb3446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_d7008d6a129ea84a50fefbc2205d0875bf5e4211e8f1312b7df0269fc2eb3446->leave($__internal_d7008d6a129ea84a50fefbc2205d0875bf5e4211e8f1312b7df0269fc2eb3446_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
