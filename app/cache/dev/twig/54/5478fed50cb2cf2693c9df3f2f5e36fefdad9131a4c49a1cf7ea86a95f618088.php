<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_d5723e228e68b27d5883200a96e1f7fa56346bc12dd0368fe53067b0f526cca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3797381aa443472913075623aeae69b02a2e022b441e2a5c6c7de682c00e347c = $this->env->getExtension("native_profiler");
        $__internal_3797381aa443472913075623aeae69b02a2e022b441e2a5c6c7de682c00e347c->enter($__internal_3797381aa443472913075623aeae69b02a2e022b441e2a5c6c7de682c00e347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3797381aa443472913075623aeae69b02a2e022b441e2a5c6c7de682c00e347c->leave($__internal_3797381aa443472913075623aeae69b02a2e022b441e2a5c6c7de682c00e347c_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_36210f570d432a6d480f1f97265e5f3f2a2b25cb3e4832378aef015df776b74c = $this->env->getExtension("native_profiler");
        $__internal_36210f570d432a6d480f1f97265e5f3f2a2b25cb3e4832378aef015df776b74c->enter($__internal_36210f570d432a6d480f1f97265e5f3f2a2b25cb3e4832378aef015df776b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_36210f570d432a6d480f1f97265e5f3f2a2b25cb3e4832378aef015df776b74c->leave($__internal_36210f570d432a6d480f1f97265e5f3f2a2b25cb3e4832378aef015df776b74c_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_8c50a8a04a4d60cd4cde196e23368b41530faec0f4c9fc344922317cc608c5e4 = $this->env->getExtension("native_profiler");
        $__internal_8c50a8a04a4d60cd4cde196e23368b41530faec0f4c9fc344922317cc608c5e4->enter($__internal_8c50a8a04a4d60cd4cde196e23368b41530faec0f4c9fc344922317cc608c5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_8c50a8a04a4d60cd4cde196e23368b41530faec0f4c9fc344922317cc608c5e4->leave($__internal_8c50a8a04a4d60cd4cde196e23368b41530faec0f4c9fc344922317cc608c5e4_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_58e30448cb5fa9c185f9e39f54509fb430d40a7836b349615bebccd2904462f7 = $this->env->getExtension("native_profiler");
        $__internal_58e30448cb5fa9c185f9e39f54509fb430d40a7836b349615bebccd2904462f7->enter($__internal_58e30448cb5fa9c185f9e39f54509fb430d40a7836b349615bebccd2904462f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_58e30448cb5fa9c185f9e39f54509fb430d40a7836b349615bebccd2904462f7->leave($__internal_58e30448cb5fa9c185f9e39f54509fb430d40a7836b349615bebccd2904462f7_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_0d28841a4f4e1cd7f13f9fe96c7cbf9b6cff03f29b9e763016ed671a7676c826 = $this->env->getExtension("native_profiler");
        $__internal_0d28841a4f4e1cd7f13f9fe96c7cbf9b6cff03f29b9e763016ed671a7676c826->enter($__internal_0d28841a4f4e1cd7f13f9fe96c7cbf9b6cff03f29b9e763016ed671a7676c826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_0d28841a4f4e1cd7f13f9fe96c7cbf9b6cff03f29b9e763016ed671a7676c826->leave($__internal_0d28841a4f4e1cd7f13f9fe96c7cbf9b6cff03f29b9e763016ed671a7676c826_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {# block classes are prepended with a container class #}*/
/* {% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}*/
/* */
/* {# identify a block role used by the page editor #}*/
/* {% block block_role %}container{% endblock %}*/
/* */
/* {# render container block #}*/
/* {% block block %}*/
/*     {% if decorator %}{{ decorator.pre|raw }}{% endif %}*/
/*     {% for child in block.children %}*/
/*         {% block block_child_render %}*/
/*             {{ sonata_block_render(child) }}*/
/*         {% endblock %}*/
/*     {% endfor %}*/
/*     {% if decorator %}{{ decorator.post|raw }}{% endif %}*/
/* {% endblock %}*/
/* */
