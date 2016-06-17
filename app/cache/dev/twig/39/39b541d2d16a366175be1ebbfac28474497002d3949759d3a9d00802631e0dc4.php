<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_3e31a06e77b291fd4f9e32cb3062335dad245b1e4180387f24ec53481503e349 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_075cc3cbe4495c673171a261a65295fb7bf99d625fb3a6d476968eb454c0a5fe = $this->env->getExtension("native_profiler");
        $__internal_075cc3cbe4495c673171a261a65295fb7bf99d625fb3a6d476968eb454c0a5fe->enter($__internal_075cc3cbe4495c673171a261a65295fb7bf99d625fb3a6d476968eb454c0a5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075cc3cbe4495c673171a261a65295fb7bf99d625fb3a6d476968eb454c0a5fe->leave($__internal_075cc3cbe4495c673171a261a65295fb7bf99d625fb3a6d476968eb454c0a5fe_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_49a83f46fb7ba5abf4a2b9da7739e9c12e00d89bbd05bb710decd99ee19702de = $this->env->getExtension("native_profiler");
        $__internal_49a83f46fb7ba5abf4a2b9da7739e9c12e00d89bbd05bb710decd99ee19702de->enter($__internal_49a83f46fb7ba5abf4a2b9da7739e9c12e00d89bbd05bb710decd99ee19702de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_49a83f46fb7ba5abf4a2b9da7739e9c12e00d89bbd05bb710decd99ee19702de->leave($__internal_49a83f46fb7ba5abf4a2b9da7739e9c12e00d89bbd05bb710decd99ee19702de_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_0af8935774dd9c07b6f03b6e152b00a85e7b787333c76a50fc40cd9ae27f50b1 = $this->env->getExtension("native_profiler");
        $__internal_0af8935774dd9c07b6f03b6e152b00a85e7b787333c76a50fc40cd9ae27f50b1->enter($__internal_0af8935774dd9c07b6f03b6e152b00a85e7b787333c76a50fc40cd9ae27f50b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_0af8935774dd9c07b6f03b6e152b00a85e7b787333c76a50fc40cd9ae27f50b1->leave($__internal_0af8935774dd9c07b6f03b6e152b00a85e7b787333c76a50fc40cd9ae27f50b1_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_7e47e11e5e989b03ccd590ec05c31b0863bf528ba53ee8825f9b1f4103d6f5d8 = $this->env->getExtension("native_profiler");
        $__internal_7e47e11e5e989b03ccd590ec05c31b0863bf528ba53ee8825f9b1f4103d6f5d8->enter($__internal_7e47e11e5e989b03ccd590ec05c31b0863bf528ba53ee8825f9b1f4103d6f5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_7e47e11e5e989b03ccd590ec05c31b0863bf528ba53ee8825f9b1f4103d6f5d8->leave($__internal_7e47e11e5e989b03ccd590ec05c31b0863bf528ba53ee8825f9b1f4103d6f5d8_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_8d6384645e8641e7c1aaf0875bd6f6ceb4c9c97963ec214905f2c4e9b4d93ee7 = $this->env->getExtension("native_profiler");
        $__internal_8d6384645e8641e7c1aaf0875bd6f6ceb4c9c97963ec214905f2c4e9b4d93ee7->enter($__internal_8d6384645e8641e7c1aaf0875bd6f6ceb4c9c97963ec214905f2c4e9b4d93ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_8d6384645e8641e7c1aaf0875bd6f6ceb4c9c97963ec214905f2c4e9b4d93ee7->leave($__internal_8d6384645e8641e7c1aaf0875bd6f6ceb4c9c97963ec214905f2c4e9b4d93ee7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
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
