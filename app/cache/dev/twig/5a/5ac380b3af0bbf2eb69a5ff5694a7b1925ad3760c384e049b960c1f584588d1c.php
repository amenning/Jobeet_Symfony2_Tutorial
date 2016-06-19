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
        $__internal_4eacf7304b05c08167538fabb4ab35812ee02f6b20fd3e9bd8d40453ef568507 = $this->env->getExtension("native_profiler");
        $__internal_4eacf7304b05c08167538fabb4ab35812ee02f6b20fd3e9bd8d40453ef568507->enter($__internal_4eacf7304b05c08167538fabb4ab35812ee02f6b20fd3e9bd8d40453ef568507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eacf7304b05c08167538fabb4ab35812ee02f6b20fd3e9bd8d40453ef568507->leave($__internal_4eacf7304b05c08167538fabb4ab35812ee02f6b20fd3e9bd8d40453ef568507_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7d2bc49a975ec2eff3ad1ac9eb83d483bef7f5ed3937a709a3afa17f908493eb = $this->env->getExtension("native_profiler");
        $__internal_7d2bc49a975ec2eff3ad1ac9eb83d483bef7f5ed3937a709a3afa17f908493eb->enter($__internal_7d2bc49a975ec2eff3ad1ac9eb83d483bef7f5ed3937a709a3afa17f908493eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_7d2bc49a975ec2eff3ad1ac9eb83d483bef7f5ed3937a709a3afa17f908493eb->leave($__internal_7d2bc49a975ec2eff3ad1ac9eb83d483bef7f5ed3937a709a3afa17f908493eb_prof);

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
