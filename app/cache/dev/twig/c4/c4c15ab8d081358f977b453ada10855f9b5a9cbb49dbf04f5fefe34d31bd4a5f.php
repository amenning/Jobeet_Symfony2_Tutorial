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
        $__internal_209cdad7f724593afad6b47161296b208c83c66d0e1073113e4e248bc9ce1399 = $this->env->getExtension("native_profiler");
        $__internal_209cdad7f724593afad6b47161296b208c83c66d0e1073113e4e248bc9ce1399->enter($__internal_209cdad7f724593afad6b47161296b208c83c66d0e1073113e4e248bc9ce1399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209cdad7f724593afad6b47161296b208c83c66d0e1073113e4e248bc9ce1399->leave($__internal_209cdad7f724593afad6b47161296b208c83c66d0e1073113e4e248bc9ce1399_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c14bc91e9906fe97add882a0c031bcab18b6cdedbf743f5bb3405510d7d33ce4 = $this->env->getExtension("native_profiler");
        $__internal_c14bc91e9906fe97add882a0c031bcab18b6cdedbf743f5bb3405510d7d33ce4->enter($__internal_c14bc91e9906fe97add882a0c031bcab18b6cdedbf743f5bb3405510d7d33ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_c14bc91e9906fe97add882a0c031bcab18b6cdedbf743f5bb3405510d7d33ce4->leave($__internal_c14bc91e9906fe97add882a0c031bcab18b6cdedbf743f5bb3405510d7d33ce4_prof);

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
