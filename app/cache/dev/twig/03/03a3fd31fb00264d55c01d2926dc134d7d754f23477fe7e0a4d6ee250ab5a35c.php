<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_0a4d6480741dd0ad8fde4fa59b310775cc92beb275da7540006ef4125fa1b60f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba3e9453063bb2d5a58760b9e4b0c691a645d6b797392137c45284c77c29f919 = $this->env->getExtension("native_profiler");
        $__internal_ba3e9453063bb2d5a58760b9e4b0c691a645d6b797392137c45284c77c29f919->enter($__internal_ba3e9453063bb2d5a58760b9e4b0c691a645d6b797392137c45284c77c29f919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba3e9453063bb2d5a58760b9e4b0c691a645d6b797392137c45284c77c29f919->leave($__internal_ba3e9453063bb2d5a58760b9e4b0c691a645d6b797392137c45284c77c29f919_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b05467f7e55018ab6ff64d6b896717aee51ad5e45d8d99fc8c73eef52f6a2b2d = $this->env->getExtension("native_profiler");
        $__internal_b05467f7e55018ab6ff64d6b896717aee51ad5e45d8d99fc8c73eef52f6a2b2d->enter($__internal_b05467f7e55018ab6ff64d6b896717aee51ad5e45d8d99fc8c73eef52f6a2b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_b05467f7e55018ab6ff64d6b896717aee51ad5e45d8d99fc8c73eef52f6a2b2d->leave($__internal_b05467f7e55018ab6ff64d6b896717aee51ad5e45d8d99fc8c73eef52f6a2b2d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
