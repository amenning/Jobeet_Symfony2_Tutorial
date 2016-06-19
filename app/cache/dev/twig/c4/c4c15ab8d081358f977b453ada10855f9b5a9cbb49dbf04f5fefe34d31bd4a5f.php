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
        $__internal_61b6ce269e01ca89c9368501859223c8559db8415d760ef22b613b4e8ab6df08 = $this->env->getExtension("native_profiler");
        $__internal_61b6ce269e01ca89c9368501859223c8559db8415d760ef22b613b4e8ab6df08->enter($__internal_61b6ce269e01ca89c9368501859223c8559db8415d760ef22b613b4e8ab6df08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b6ce269e01ca89c9368501859223c8559db8415d760ef22b613b4e8ab6df08->leave($__internal_61b6ce269e01ca89c9368501859223c8559db8415d760ef22b613b4e8ab6df08_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e8a58e82bd2c6fb5dd3da4f4e9c1985744653b6dcb8695e35e54d224fd53c48c = $this->env->getExtension("native_profiler");
        $__internal_e8a58e82bd2c6fb5dd3da4f4e9c1985744653b6dcb8695e35e54d224fd53c48c->enter($__internal_e8a58e82bd2c6fb5dd3da4f4e9c1985744653b6dcb8695e35e54d224fd53c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_e8a58e82bd2c6fb5dd3da4f4e9c1985744653b6dcb8695e35e54d224fd53c48c->leave($__internal_e8a58e82bd2c6fb5dd3da4f4e9c1985744653b6dcb8695e35e54d224fd53c48c_prof);

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
