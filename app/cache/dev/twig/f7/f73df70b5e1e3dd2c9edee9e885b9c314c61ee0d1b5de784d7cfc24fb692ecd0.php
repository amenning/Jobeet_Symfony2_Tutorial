<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_be73c4a532b8018682b50c14b32e1293768adf056df2414e5857272c0f109cc5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_439ab7babd1f62424b69b1fe9d762cfd2576575f834f101493e2a5bc88b011ef = $this->env->getExtension("native_profiler");
        $__internal_439ab7babd1f62424b69b1fe9d762cfd2576575f834f101493e2a5bc88b011ef->enter($__internal_439ab7babd1f62424b69b1fe9d762cfd2576575f834f101493e2a5bc88b011ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_439ab7babd1f62424b69b1fe9d762cfd2576575f834f101493e2a5bc88b011ef->leave($__internal_439ab7babd1f62424b69b1fe9d762cfd2576575f834f101493e2a5bc88b011ef_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_698fd31131f62403a80c8b5c9dd7d99aab8ba74e4fffaae2f7d9efe0da8826d0 = $this->env->getExtension("native_profiler");
        $__internal_698fd31131f62403a80c8b5c9dd7d99aab8ba74e4fffaae2f7d9efe0da8826d0->enter($__internal_698fd31131f62403a80c8b5c9dd7d99aab8ba74e4fffaae2f7d9efe0da8826d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_698fd31131f62403a80c8b5c9dd7d99aab8ba74e4fffaae2f7d9efe0da8826d0->leave($__internal_698fd31131f62403a80c8b5c9dd7d99aab8ba74e4fffaae2f7d9efe0da8826d0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
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
