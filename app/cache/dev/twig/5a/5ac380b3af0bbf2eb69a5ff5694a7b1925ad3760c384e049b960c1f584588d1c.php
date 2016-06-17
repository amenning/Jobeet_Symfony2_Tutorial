<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_c627b2fe043b392d7d5586bdb0c0e07bdbe08da58e1b1a5de196c9524ce7baed extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62d23dc07a20862f4d5a3b407157ae1c8c0be9e63f4153b68ae30a9b6431ba89 = $this->env->getExtension("native_profiler");
        $__internal_62d23dc07a20862f4d5a3b407157ae1c8c0be9e63f4153b68ae30a9b6431ba89->enter($__internal_62d23dc07a20862f4d5a3b407157ae1c8c0be9e63f4153b68ae30a9b6431ba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d23dc07a20862f4d5a3b407157ae1c8c0be9e63f4153b68ae30a9b6431ba89->leave($__internal_62d23dc07a20862f4d5a3b407157ae1c8c0be9e63f4153b68ae30a9b6431ba89_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1474fd781c8d9148c2ad6924b32ee2dda5f119c6a2e3a0ff92c414099706a31e = $this->env->getExtension("native_profiler");
        $__internal_1474fd781c8d9148c2ad6924b32ee2dda5f119c6a2e3a0ff92c414099706a31e->enter($__internal_1474fd781c8d9148c2ad6924b32ee2dda5f119c6a2e3a0ff92c414099706a31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_1474fd781c8d9148c2ad6924b32ee2dda5f119c6a2e3a0ff92c414099706a31e->leave($__internal_1474fd781c8d9148c2ad6924b32ee2dda5f119c6a2e3a0ff92c414099706a31e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
